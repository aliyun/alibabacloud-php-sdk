<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSetsResponseBody\dataSets\dataSetReferences;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSetsResponseBody\dataSets\ipWhitelistRecognizers;

class dataSets extends Model
{
    /**
     * @var int
     */
    public $createTime;

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
    public $dataSetFieldNames;

    /**
     * @var string
     */
    public $dataSetFileName;

    /**
     * @var string
     */
    public $dataSetId;

    /**
     * @var string
     */
    public $dataSetName;

    /**
     * @var dataSetReferences[]
     */
    public $dataSetReferences;

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
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataSetDescription' => 'DataSetDescription',
        'dataSetFieldKeyName' => 'DataSetFieldKeyName',
        'dataSetFieldNames' => 'DataSetFieldNames',
        'dataSetFileName' => 'DataSetFileName',
        'dataSetId' => 'DataSetId',
        'dataSetName' => 'DataSetName',
        'dataSetReferences' => 'DataSetReferences',
        'dataSetStatus' => 'DataSetStatus',
        'dataSetType' => 'DataSetType',
        'ipWhitelistRecognizers' => 'IpWhitelistRecognizers',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->dataSetReferences)) {
            Model::validateArray($this->dataSetReferences);
        }
        if (\is_array($this->ipWhitelistRecognizers)) {
            Model::validateArray($this->ipWhitelistRecognizers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataSetDescription) {
            $res['DataSetDescription'] = $this->dataSetDescription;
        }

        if (null !== $this->dataSetFieldKeyName) {
            $res['DataSetFieldKeyName'] = $this->dataSetFieldKeyName;
        }

        if (null !== $this->dataSetFieldNames) {
            $res['DataSetFieldNames'] = $this->dataSetFieldNames;
        }

        if (null !== $this->dataSetFileName) {
            $res['DataSetFileName'] = $this->dataSetFileName;
        }

        if (null !== $this->dataSetId) {
            $res['DataSetId'] = $this->dataSetId;
        }

        if (null !== $this->dataSetName) {
            $res['DataSetName'] = $this->dataSetName;
        }

        if (null !== $this->dataSetReferences) {
            if (\is_array($this->dataSetReferences)) {
                $res['DataSetReferences'] = [];
                $n1 = 0;
                foreach ($this->dataSetReferences as $item1) {
                    $res['DataSetReferences'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataSetDescription'])) {
            $model->dataSetDescription = $map['DataSetDescription'];
        }

        if (isset($map['DataSetFieldKeyName'])) {
            $model->dataSetFieldKeyName = $map['DataSetFieldKeyName'];
        }

        if (isset($map['DataSetFieldNames'])) {
            $model->dataSetFieldNames = $map['DataSetFieldNames'];
        }

        if (isset($map['DataSetFileName'])) {
            $model->dataSetFileName = $map['DataSetFileName'];
        }

        if (isset($map['DataSetId'])) {
            $model->dataSetId = $map['DataSetId'];
        }

        if (isset($map['DataSetName'])) {
            $model->dataSetName = $map['DataSetName'];
        }

        if (isset($map['DataSetReferences'])) {
            if (!empty($map['DataSetReferences'])) {
                $model->dataSetReferences = [];
                $n1 = 0;
                foreach ($map['DataSetReferences'] as $item1) {
                    $model->dataSetReferences[$n1] = dataSetReferences::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
