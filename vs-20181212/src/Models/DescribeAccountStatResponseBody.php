<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountStatResponseBody extends Model
{
    /**
     * @var int
     */
    public $templateLimit;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $templateNum;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $groupLimit;

    /**
     * @var int
     */
    public $groupNum;
    protected $_name = [
        'templateLimit' => 'TemplateLimit',
        'requestId'     => 'RequestId',
        'templateNum'   => 'TemplateNum',
        'id'            => 'Id',
        'groupLimit'    => 'GroupLimit',
        'groupNum'      => 'GroupNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateLimit) {
            $res['TemplateLimit'] = $this->templateLimit;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateNum) {
            $res['TemplateNum'] = $this->templateNum;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->groupLimit) {
            $res['GroupLimit'] = $this->groupLimit;
        }
        if (null !== $this->groupNum) {
            $res['GroupNum'] = $this->groupNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountStatResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateLimit'])) {
            $model->templateLimit = $map['TemplateLimit'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateNum'])) {
            $model->templateNum = $map['TemplateNum'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['GroupLimit'])) {
            $model->groupLimit = $map['GroupLimit'];
        }
        if (isset($map['GroupNum'])) {
            $model->groupNum = $map['GroupNum'];
        }

        return $model;
    }
}
