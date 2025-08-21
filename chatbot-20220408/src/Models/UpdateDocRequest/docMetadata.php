<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDocRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDocRequest\docMetadata\metaCellInfoDTOList;

class docMetadata extends Model
{
    /**
     * @var string
     */
    public $businessViewId;

    /**
     * @var string
     */
    public $businessViewName;

    /**
     * @var metaCellInfoDTOList[]
     */
    public $metaCellInfoDTOList;
    protected $_name = [
        'businessViewId' => 'BusinessViewId',
        'businessViewName' => 'BusinessViewName',
        'metaCellInfoDTOList' => 'MetaCellInfoDTOList',
    ];

    public function validate()
    {
        if (\is_array($this->metaCellInfoDTOList)) {
            Model::validateArray($this->metaCellInfoDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessViewId) {
            $res['BusinessViewId'] = $this->businessViewId;
        }

        if (null !== $this->businessViewName) {
            $res['BusinessViewName'] = $this->businessViewName;
        }

        if (null !== $this->metaCellInfoDTOList) {
            if (\is_array($this->metaCellInfoDTOList)) {
                $res['MetaCellInfoDTOList'] = [];
                $n1 = 0;
                foreach ($this->metaCellInfoDTOList as $item1) {
                    $res['MetaCellInfoDTOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BusinessViewId'])) {
            $model->businessViewId = $map['BusinessViewId'];
        }

        if (isset($map['BusinessViewName'])) {
            $model->businessViewName = $map['BusinessViewName'];
        }

        if (isset($map['MetaCellInfoDTOList'])) {
            if (!empty($map['MetaCellInfoDTOList'])) {
                $model->metaCellInfoDTOList = [];
                $n1 = 0;
                foreach ($map['MetaCellInfoDTOList'] as $item1) {
                    $model->metaCellInfoDTOList[$n1] = metaCellInfoDTOList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
