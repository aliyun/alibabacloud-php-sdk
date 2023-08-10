<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class dataDeliveryChannelInfo extends Model
{
    /**
     * @var int
     */
    public $partitionNum;

    /**
     * @var string
     */
    public $publicDproxyUrl;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $vpcDproxyUrl;
    protected $_name = [
        'partitionNum'    => 'PartitionNum',
        'publicDproxyUrl' => 'PublicDproxyUrl',
        'region'          => 'Region',
        'topic'           => 'Topic',
        'vpcDproxyUrl'    => 'VpcDproxyUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partitionNum) {
            $res['PartitionNum'] = $this->partitionNum;
        }
        if (null !== $this->publicDproxyUrl) {
            $res['PublicDproxyUrl'] = $this->publicDproxyUrl;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->vpcDproxyUrl) {
            $res['VpcDproxyUrl'] = $this->vpcDproxyUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDeliveryChannelInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PartitionNum'])) {
            $model->partitionNum = $map['PartitionNum'];
        }
        if (isset($map['PublicDproxyUrl'])) {
            $model->publicDproxyUrl = $map['PublicDproxyUrl'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['VpcDproxyUrl'])) {
            $model->vpcDproxyUrl = $map['VpcDproxyUrl'];
        }

        return $model;
    }
}
