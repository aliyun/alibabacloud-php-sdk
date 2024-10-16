<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDocRequest;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDocRequest\docMetadata\metaCellInfoDTOList;
use AlibabaCloud\Tea\Model;

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
        'businessViewId'      => 'BusinessViewId',
        'businessViewName'    => 'BusinessViewName',
        'metaCellInfoDTOList' => 'MetaCellInfoDTOList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessViewId) {
            $res['BusinessViewId'] = $this->businessViewId;
        }
        if (null !== $this->businessViewName) {
            $res['BusinessViewName'] = $this->businessViewName;
        }
        if (null !== $this->metaCellInfoDTOList) {
            $res['MetaCellInfoDTOList'] = [];
            if (null !== $this->metaCellInfoDTOList && \is_array($this->metaCellInfoDTOList)) {
                $n = 0;
                foreach ($this->metaCellInfoDTOList as $item) {
                    $res['MetaCellInfoDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return docMetadata
     */
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
                $n                          = 0;
                foreach ($map['MetaCellInfoDTOList'] as $item) {
                    $model->metaCellInfoDTOList[$n++] = null !== $item ? metaCellInfoDTOList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
