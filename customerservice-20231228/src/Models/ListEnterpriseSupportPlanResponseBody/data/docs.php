<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanResponseBody\data;

use AlibabaCloud\Tea\Model;

class docs extends Model
{
    /**
     * @var int
     */
    public $docId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $freeOrderApplyCode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $uploadTime;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'docId'              => 'docId',
        'fileName'           => 'fileName',
        'freeOrderApplyCode' => 'freeOrderApplyCode',
        'name'               => 'name',
        'orderId'            => 'orderId',
        'uploadTime'         => 'uploadTime',
        'url'                => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->freeOrderApplyCode) {
            $res['freeOrderApplyCode'] = $this->freeOrderApplyCode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }
        if (null !== $this->uploadTime) {
            $res['uploadTime'] = $this->uploadTime;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return docs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['freeOrderApplyCode'])) {
            $model->freeOrderApplyCode = $map['freeOrderApplyCode'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }
        if (isset($map['uploadTime'])) {
            $model->uploadTime = $map['uploadTime'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
