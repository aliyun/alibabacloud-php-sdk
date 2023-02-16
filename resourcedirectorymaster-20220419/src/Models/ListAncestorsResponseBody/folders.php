<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListAncestorsResponseBody;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListAncestorsResponseBody\folders\folder;
use AlibabaCloud\Tea\Model;

class folders extends Model
{
    /**
     * @var folder[]
     */
    public $folder;
    protected $_name = [
        'folder' => 'Folder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folder) {
            $res['Folder'] = [];
            if (null !== $this->folder && \is_array($this->folder)) {
                $n = 0;
                foreach ($this->folder as $item) {
                    $res['Folder'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return folders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Folder'])) {
            if (!empty($map['Folder'])) {
                $model->folder = [];
                $n             = 0;
                foreach ($map['Folder'] as $item) {
                    $model->folder[$n++] = null !== $item ? folder::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
