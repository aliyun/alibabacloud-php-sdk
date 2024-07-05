<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountStatResponseBody extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $groupLimit;

    /**
     * @example 6
     *
     * @var int
     */
    public $groupNum;

    /**
     * @description ID
     *
     * @example 3238848****092996
     *
     * @var string
     */
    public $id;

    /**
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
     *
     * @var int
     */
    public $templateLimit;

    /**
     * @example 10
     *
     * @var int
     */
    public $templateNum;
    protected $_name = [
        'groupLimit'    => 'GroupLimit',
        'groupNum'      => 'GroupNum',
        'id'            => 'Id',
        'requestId'     => 'RequestId',
        'templateLimit' => 'TemplateLimit',
        'templateNum'   => 'TemplateNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupLimit) {
            $res['GroupLimit'] = $this->groupLimit;
        }
        if (null !== $this->groupNum) {
            $res['GroupNum'] = $this->groupNum;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateLimit) {
            $res['TemplateLimit'] = $this->templateLimit;
        }
        if (null !== $this->templateNum) {
            $res['TemplateNum'] = $this->templateNum;
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
        if (isset($map['GroupLimit'])) {
            $model->groupLimit = $map['GroupLimit'];
        }
        if (isset($map['GroupNum'])) {
            $model->groupNum = $map['GroupNum'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateLimit'])) {
            $model->templateLimit = $map['TemplateLimit'];
        }
        if (isset($map['TemplateNum'])) {
            $model->templateNum = $map['TemplateNum'];
        }

        return $model;
    }
}
