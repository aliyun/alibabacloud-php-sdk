<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAbnormalCloudResourcesResponseBody\abnormalCloudResources;

class DescribeAbnormalCloudResourcesResponseBody extends Model
{
    /**
     * @var abnormalCloudResources[]
     */
    public $abnormalCloudResources;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'abnormalCloudResources' => 'AbnormalCloudResources',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->abnormalCloudResources)) {
            Model::validateArray($this->abnormalCloudResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalCloudResources) {
            if (\is_array($this->abnormalCloudResources)) {
                $res['AbnormalCloudResources'] = [];
                $n1 = 0;
                foreach ($this->abnormalCloudResources as $item1) {
                    $res['AbnormalCloudResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AbnormalCloudResources'])) {
            if (!empty($map['AbnormalCloudResources'])) {
                $model->abnormalCloudResources = [];
                $n1 = 0;
                foreach ($map['AbnormalCloudResources'] as $item1) {
                    $model->abnormalCloudResources[$n1] = abnormalCloudResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
