<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class dataDeliveryChannelInfo extends Model
{
    /**
     * @description The number of partitions of the destination topic.
     *
     * @example 3
     *
     * @var int
     */
    public $partitionNum;

    /**
     * @description The public endpoint of the data shipping channel.
     *
     * @example dts-****.aliyuncs.com:18***
     *
     * @var string
     */
    public $publicDproxyUrl;

    /**
     * @description The region in which the data shipping channel resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The destination topic of the data shipping instance.
     *
     * @example cn_hangzhou_******_data_delivery_version2
     *
     * @var string
     */
    public $topic;

    /**
     * @description The VPC endpoint of the data shipping channel.
     *
     * @example dts-****.aliyuncs.com:18***
     *
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
