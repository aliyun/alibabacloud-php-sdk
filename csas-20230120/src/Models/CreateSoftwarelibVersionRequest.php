<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class CreateSoftwarelibVersionRequest extends Model
{
    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $publisherType;

    /**
     * @var string
     */
    public $softwareId;

    /**
     * @var string
     */
    public $softwareName;

    /**
     * @var string
     */
    public $softwarePkgName;

    /**
     * @var int
     */
    public $softwarePkgSize;

    /**
     * @var string
     */
    public $softwareUrl;

    /**
     * @var string
     */
    public $softwareVersion;
    protected $_name = [
        'md5' => 'Md5',
        'os' => 'Os',
        'publisherType' => 'PublisherType',
        'softwareId' => 'SoftwareId',
        'softwareName' => 'SoftwareName',
        'softwarePkgName' => 'SoftwarePkgName',
        'softwarePkgSize' => 'SoftwarePkgSize',
        'softwareUrl' => 'SoftwareUrl',
        'softwareVersion' => 'SoftwareVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->publisherType) {
            $res['PublisherType'] = $this->publisherType;
        }

        if (null !== $this->softwareId) {
            $res['SoftwareId'] = $this->softwareId;
        }

        if (null !== $this->softwareName) {
            $res['SoftwareName'] = $this->softwareName;
        }

        if (null !== $this->softwarePkgName) {
            $res['SoftwarePkgName'] = $this->softwarePkgName;
        }

        if (null !== $this->softwarePkgSize) {
            $res['SoftwarePkgSize'] = $this->softwarePkgSize;
        }

        if (null !== $this->softwareUrl) {
            $res['SoftwareUrl'] = $this->softwareUrl;
        }

        if (null !== $this->softwareVersion) {
            $res['SoftwareVersion'] = $this->softwareVersion;
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
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['PublisherType'])) {
            $model->publisherType = $map['PublisherType'];
        }

        if (isset($map['SoftwareId'])) {
            $model->softwareId = $map['SoftwareId'];
        }

        if (isset($map['SoftwareName'])) {
            $model->softwareName = $map['SoftwareName'];
        }

        if (isset($map['SoftwarePkgName'])) {
            $model->softwarePkgName = $map['SoftwarePkgName'];
        }

        if (isset($map['SoftwarePkgSize'])) {
            $model->softwarePkgSize = $map['SoftwarePkgSize'];
        }

        if (isset($map['SoftwareUrl'])) {
            $model->softwareUrl = $map['SoftwareUrl'];
        }

        if (isset($map['SoftwareVersion'])) {
            $model->softwareVersion = $map['SoftwareVersion'];
        }

        return $model;
    }
}
