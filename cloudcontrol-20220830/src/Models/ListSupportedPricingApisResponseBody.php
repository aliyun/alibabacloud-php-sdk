<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListSupportedPricingApisResponseBody\supportedApis;

class ListSupportedPricingApisResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var supportedApis[]
     */
    public $supportedApis;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'supportedApis' => 'supportedApis',
    ];

    public function validate()
    {
        if (\is_array($this->supportedApis)) {
            Model::validateArray($this->supportedApis);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->supportedApis) {
            if (\is_array($this->supportedApis)) {
                $res['supportedApis'] = [];
                $n1 = 0;
                foreach ($this->supportedApis as $item1) {
                    $res['supportedApis'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['supportedApis'])) {
            if (!empty($map['supportedApis'])) {
                $model->supportedApis = [];
                $n1 = 0;
                foreach ($map['supportedApis'] as $item1) {
                    $model->supportedApis[$n1] = supportedApis::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
