<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class Source extends Model
{
    /**
     * @var string
     */
    public $arn;
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
    public $httpPackageConfigurations;
    /**
     * @var string
     */
    public $sourceLocationName;
    /**
     * @var string
     */
    public $sourceName;
    /**
     * @var string
     */
    public $sourceType;
    /**
     * @var int
     */
    public $state;
    protected $_name = [
        'arn'                       => 'Arn',
        'gmtCreate'                 => 'GmtCreate',
        'gmtModified'               => 'GmtModified',
        'httpPackageConfigurations' => 'HttpPackageConfigurations',
        'sourceLocationName'        => 'SourceLocationName',
        'sourceName'                => 'SourceName',
        'sourceType'                => 'SourceType',
        'state'                     => 'State',
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

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->httpPackageConfigurations) {
            $res['HttpPackageConfigurations'] = $this->httpPackageConfigurations;
        }

        if (null !== $this->sourceLocationName) {
            $res['SourceLocationName'] = $this->sourceLocationName;
        }

        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['HttpPackageConfigurations'])) {
            $model->httpPackageConfigurations = $map['HttpPackageConfigurations'];
        }

        if (isset($map['SourceLocationName'])) {
            $model->sourceLocationName = $map['SourceLocationName'];
        }

        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
