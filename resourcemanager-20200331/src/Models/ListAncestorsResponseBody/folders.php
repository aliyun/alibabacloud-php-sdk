<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAncestorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAncestorsResponseBody\folders\folder;

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
        if (\is_array($this->folder)) {
            Model::validateArray($this->folder);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->folder) {
            if (\is_array($this->folder)) {
                $res['Folder'] = [];
                $n1            = 0;
                foreach ($this->folder as $item1) {
                    $res['Folder'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Folder'])) {
            if (!empty($map['Folder'])) {
                $model->folder = [];
                $n1            = 0;
                foreach ($map['Folder'] as $item1) {
                    $model->folder[$n1++] = folder::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
