<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionFilesResponseBody;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionFilesResponseBody\fileList\files;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionFilesResponseBody\fileList\pagination;
use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @var files[]
     */
    public $files;

    /**
     * @var pagination
     */
    public $pagination;
    protected $_name = [
        'files'      => 'Files',
        'pagination' => 'Pagination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->files) {
            $res['Files'] = [];
            if (null !== $this->files && \is_array($this->files)) {
                $n = 0;
                foreach ($this->files as $item) {
                    $res['Files'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n            = 0;
                foreach ($map['Files'] as $item) {
                    $model->files[$n++] = null !== $item ? files::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        return $model;
    }
}
