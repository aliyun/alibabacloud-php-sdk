<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateSourceLocationRequest extends Model
{
    /**
     * @var string
     */
    public $baseUrl;
    /**
     * @var bool
     */
    public $enableSegmentDelivery;
    /**
     * @var string
     */
    public $segmentDeliveryUrl;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
