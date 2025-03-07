<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateSourceLocationRequest extends Model
{
    /**
     * @description The protocol and hostname of the source location.
     *
     * This parameter is required.
     * @example http://xxx.com
     *
     * @var string
     */
    public $baseUrl;

    /**
     * @description Specifies whether to use an independent domain name to access the segments.
     *
     * @example true
     *
     * @var bool
     */
    public $enableSegmentDelivery;

    /**
     * @description The domain name used to access the segments.
     *
     * @example http://xxxxx.com
     *
     * @var string
     */
    public $segmentDeliveryUrl;

    /**
     * @description The name of the source location.
     *
     * This parameter is required.
     * @example MySourcelocation
     *
     * @var string
     */
    public $sourceLocationName;
    protected $_name = [
        'baseUrl'               => 'BaseUrl',
        'enableSegmentDelivery' => 'EnableSegmentDelivery',
        'segmentDeliveryUrl'    => 'SegmentDeliveryUrl',
        'sourceLocationName'    => 'SourceLocationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseUrl) {
            $res['BaseUrl'] = $this->baseUrl;
        }
        if (null !== $this->enableSegmentDelivery) {
            $res['EnableSegmentDelivery'] = $this->enableSegmentDelivery;
        }
        if (null !== $this->segmentDeliveryUrl) {
            $res['SegmentDeliveryUrl'] = $this->segmentDeliveryUrl;
        }
        if (null !== $this->sourceLocationName) {
            $res['SourceLocationName'] = $this->sourceLocationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSourceLocationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseUrl'])) {
            $model->baseUrl = $map['BaseUrl'];
        }
        if (isset($map['EnableSegmentDelivery'])) {
            $model->enableSegmentDelivery = $map['EnableSegmentDelivery'];
        }
        if (isset($map['SegmentDeliveryUrl'])) {
            $model->segmentDeliveryUrl = $map['SegmentDeliveryUrl'];
        }
        if (isset($map['SourceLocationName'])) {
            $model->sourceLocationName = $map['SourceLocationName'];
        }

        return $model;
    }
}
