<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ChannelAssemblySourceLocation extends Model
{
    /**
     * @var string
     */
    public $arn;
    /**
     * @var string
     */
    public $baseUrl;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var string
     */
    public $segmentDeliveryConfigurations;
    /**
     * @var string
     */
    public $sourceLocationName;
    /**
     * @var int
     */
    public $state;
    protected $_name = [
        'arn'                           => 'Arn',
        'baseUrl'                       => 'BaseUrl',
        'gmtCreate'                     => 'GmtCreate',
        'gmtModified'                   => 'GmtModified',
        'segmentDeliveryConfigurations' => 'SegmentDeliveryConfigurations',
        'sourceLocationName'            => 'SourceLocationName',
        'state'                         => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->baseUrl) {
            $res['BaseUrl'] = $this->baseUrl;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->segmentDeliveryConfigurations) {
            $res['SegmentDeliveryConfigurations'] = $this->segmentDeliveryConfigurations;
        }

        if (null !== $this->sourceLocationName) {
            $res['SourceLocationName'] = $this->sourceLocationName;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['BaseUrl'])) {
            $model->baseUrl = $map['BaseUrl'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['SegmentDeliveryConfigurations'])) {
            $model->segmentDeliveryConfigurations = $map['SegmentDeliveryConfigurations'];
        }

        if (isset($map['SourceLocationName'])) {
            $model->sourceLocationName = $map['SourceLocationName'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
