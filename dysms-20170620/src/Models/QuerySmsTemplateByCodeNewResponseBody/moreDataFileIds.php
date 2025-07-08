<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponseBody;

use AlibabaCloud\Dara\Model;

class moreDataFileIds extends Model
{
    /**
     * @var int[]
     */
    public $moreDataFileId;
    protected $_name = [
        'moreDataFileId' => 'MoreDataFileId',
    ];

    public function validate()
    {
        if (\is_array($this->moreDataFileId)) {
            Model::validateArray($this->moreDataFileId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moreDataFileId) {
            if (\is_array($this->moreDataFileId)) {
                $res['MoreDataFileId'] = [];
                $n1 = 0;
                foreach ($this->moreDataFileId as $item1) {
                    $res['MoreDataFileId'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['MoreDataFileId'])) {
            if (!empty($map['MoreDataFileId'])) {
                $model->moreDataFileId = [];
                $n1 = 0;
                foreach ($map['MoreDataFileId'] as $item1) {
                    $model->moreDataFileId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
