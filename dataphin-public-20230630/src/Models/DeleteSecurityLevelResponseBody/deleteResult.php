<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteSecurityLevelResponseBody;

use AlibabaCloud\Dara\Model;

class deleteResult extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var int[]
     */
    public $relatedClassifyIdList;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'relatedClassifyIdList' => 'RelatedClassifyIdList',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->relatedClassifyIdList)) {
            Model::validateArray($this->relatedClassifyIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->relatedClassifyIdList) {
            if (\is_array($this->relatedClassifyIdList)) {
                $res['RelatedClassifyIdList'] = [];
                $n1 = 0;
                foreach ($this->relatedClassifyIdList as $item1) {
                    $res['RelatedClassifyIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['RelatedClassifyIdList'])) {
            if (!empty($map['RelatedClassifyIdList'])) {
                $model->relatedClassifyIdList = [];
                $n1 = 0;
                foreach ($map['RelatedClassifyIdList'] as $item1) {
                    $model->relatedClassifyIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
