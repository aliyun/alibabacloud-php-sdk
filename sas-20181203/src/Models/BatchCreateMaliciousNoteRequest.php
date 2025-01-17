<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\BatchCreateMaliciousNoteRequest\imageMaliciousFileList;

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
        if (\is_array($this->imageMaliciousFileList)) {
            Model::validateArray($this->imageMaliciousFileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageMaliciousFileList) {
            if (\is_array($this->imageMaliciousFileList)) {
                $res['ImageMaliciousFileList'] = [];
                $n1                            = 0;
                foreach ($this->imageMaliciousFileList as $item1) {
                    $res['ImageMaliciousFileList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImageMaliciousFileList'])) {
            if (!empty($map['ImageMaliciousFileList'])) {
                $model->imageMaliciousFileList = [];
                $n1                            = 0;
                foreach ($map['ImageMaliciousFileList'] as $item1) {
                    $model->imageMaliciousFileList[$n1++] = imageMaliciousFileList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
