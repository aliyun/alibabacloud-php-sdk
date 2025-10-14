<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateDataSetRequest\ipWhitelistRecognizers;

class CreateDataSetRequest extends Model
{
    /**
     * @var string
     */
    public $dataSetDescription;

    /**
     * @var string
     */
    public $dataSetFieldKeyName;

    /**
     * @var string
     */
    public $dataSetFileName;

    /**
     * @var string
     */
    public $dataSetName;

    /**
     * @var int
     */
    public $dataSetStatus;

    /**
     * @var string
     */
    public $dataSetType;

    /**
     * @var ipWhitelistRecognizers[]
     */
    public $ipWhitelistRecognizers;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'dataSetDescription' => 'DataSetDescription',
        'dataSetFieldKeyName' => 'DataSetFieldKeyName',
        'dataSetFileName' => 'DataSetFileName',
        'dataSetName' => 'DataSetName',
        'dataSetStatus' => 'DataSetStatus',
        'dataSetType' => 'DataSetType',
        'ipWhitelistRecognizers' => 'IpWhitelistRecognizers',
        'lang' => 'Lang',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
        if (\is_array($this->ipWhitelistRecognizers)) {
            Model::validateArray($this->ipWhitelistRecognizers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSetDescription) {
            $res['DataSetDescription'] = $this->dataSetDescription;
        }

        if (null !== $this->dataSetFieldKeyName) {
            $res['DataSetFieldKeyName'] = $this->dataSetFieldKeyName;
        }

        if (null !== $this->dataSetFileName) {
            $res['DataSetFileName'] = $this->dataSetFileName;
        }

        if (null !== $this->dataSetName) {
            $res['DataSetName'] = $this->dataSetName;
        }

        if (null !== $this->dataSetStatus) {
            $res['DataSetStatus'] = $this->dataSetStatus;
        }

        if (null !== $this->dataSetType) {
            $res['DataSetType'] = $this->dataSetType;
        }

        if (null !== $this->ipWhitelistRecognizers) {
            if (\is_array($this->ipWhitelistRecognizers)) {
                $res['IpWhitelistRecognizers'] = [];
                $n1 = 0;
                foreach ($this->ipWhitelistRecognizers as $item1) {
                    $res['IpWhitelistRecognizers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['DataSetDescription'])) {
            $model->dataSetDescription = $map['DataSetDescription'];
        }

        if (isset($map['DataSetFieldKeyName'])) {
            $model->dataSetFieldKeyName = $map['DataSetFieldKeyName'];
        }

        if (isset($map['DataSetFileName'])) {
            $model->dataSetFileName = $map['DataSetFileName'];
        }

        if (isset($map['DataSetName'])) {
            $model->dataSetName = $map['DataSetName'];
        }

        if (isset($map['DataSetStatus'])) {
            $model->dataSetStatus = $map['DataSetStatus'];
        }

        if (isset($map['DataSetType'])) {
            $model->dataSetType = $map['DataSetType'];
        }

        if (isset($map['IpWhitelistRecognizers'])) {
            if (!empty($map['IpWhitelistRecognizers'])) {
                $model->ipWhitelistRecognizers = [];
                $n1 = 0;
                foreach ($map['IpWhitelistRecognizers'] as $item1) {
                    $model->ipWhitelistRecognizers[$n1] = ipWhitelistRecognizers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
