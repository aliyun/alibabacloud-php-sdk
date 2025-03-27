<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveApiStatisticResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $apiFormat;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var int
     */
    public $infoCount;

    /**
     * @var string[]
     */
    public $sensitiveCode;

    /**
     * @var int
     */
    public $sensitiveCount;
    protected $_name = [
        'apiFormat' => 'ApiFormat',
        'apiId' => 'ApiId',
        'infoCount' => 'InfoCount',
        'sensitiveCode' => 'SensitiveCode',
        'sensitiveCount' => 'SensitiveCount',
    ];

    public function validate()
    {
        if (\is_array($this->sensitiveCode)) {
            Model::validateArray($this->sensitiveCode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }

        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->infoCount) {
            $res['InfoCount'] = $this->infoCount;
        }

        if (null !== $this->sensitiveCode) {
            if (\is_array($this->sensitiveCode)) {
                $res['SensitiveCode'] = [];
                $n1 = 0;
                foreach ($this->sensitiveCode as $item1) {
                    $res['SensitiveCode'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
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
        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }

        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['InfoCount'])) {
            $model->infoCount = $map['InfoCount'];
        }

        if (isset($map['SensitiveCode'])) {
            if (!empty($map['SensitiveCode'])) {
                $model->sensitiveCode = [];
                $n1 = 0;
                foreach ($map['SensitiveCode'] as $item1) {
                    $model->sensitiveCode[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
        }

        return $model;
    }
}
