<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\BatchCreateMaliciousNoteRequest\imageMaliciousFileList;
use AlibabaCloud\Tea\Model;

class BatchCreateMaliciousNoteRequest extends Model
{
    /**
     * @var imageMaliciousFileList[]
     */
    public $imageMaliciousFileList;
    protected $_name = [
        'imageMaliciousFileList' => 'ImageMaliciousFileList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageMaliciousFileList) {
            $res['ImageMaliciousFileList'] = [];
            if (null !== $this->imageMaliciousFileList && \is_array($this->imageMaliciousFileList)) {
                $n = 0;
                foreach ($this->imageMaliciousFileList as $item) {
                    $res['ImageMaliciousFileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateMaliciousNoteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageMaliciousFileList'])) {
            if (!empty($map['ImageMaliciousFileList'])) {
                $model->imageMaliciousFileList = [];
                $n                             = 0;
                foreach ($map['ImageMaliciousFileList'] as $item) {
                    $model->imageMaliciousFileList[$n++] = null !== $item ? imageMaliciousFileList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
