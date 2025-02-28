<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database\accounts;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database\advancedInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database\basicInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database\runtimeInfo;

class database extends Model
{
    /**
     * @var accounts
     */
    public $accounts;
    /**
     * @var advancedInfo
     */
    public $advancedInfo;
    /**
     * @var basicInfo
     */
    public $basicInfo;
    /**
     * @var string
     */
    public $characterSetName;
    /**
     * @var string
     */
    public $collate;
    /**
     * @var string
     */
    public $connLimit;
    /**
     * @var string
     */
    public $ctype;
    /**
     * @var string
     */
    public $DBDescription;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $DBName;
    /**
     * @var string
     */
    public $DBStatus;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var runtimeInfo
     */
    public $runtimeInfo;
    /**
     * @var string
     */
    public $tablespace;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accounts'         => 'Accounts',
        'advancedInfo'     => 'AdvancedInfo',
        'basicInfo'        => 'BasicInfo',
        'characterSetName' => 'CharacterSetName',
        'collate'          => 'Collate',
        'connLimit'        => 'ConnLimit',
        'ctype'            => 'Ctype',
        'DBDescription'    => 'DBDescription',
        'DBInstanceId'     => 'DBInstanceId',
        'DBName'           => 'DBName',
        'DBStatus'         => 'DBStatus',
        'engine'           => 'Engine',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'runtimeInfo'      => 'RuntimeInfo',
        'tablespace'       => 'Tablespace',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->accounts) {
            $this->accounts->validate();
        }
        if (null !== $this->advancedInfo) {
            $this->advancedInfo->validate();
        }
        if (null !== $this->basicInfo) {
            $this->basicInfo->validate();
        }
        if (null !== $this->runtimeInfo) {
            $this->runtimeInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = null !== $this->accounts ? $this->accounts->toArray($noStream) : $this->accounts;
        }

        if (null !== $this->advancedInfo) {
            $res['AdvancedInfo'] = null !== $this->advancedInfo ? $this->advancedInfo->toArray($noStream) : $this->advancedInfo;
        }

        if (null !== $this->basicInfo) {
            $res['BasicInfo'] = null !== $this->basicInfo ? $this->basicInfo->toArray($noStream) : $this->basicInfo;
        }

        if (null !== $this->characterSetName) {
            $res['CharacterSetName'] = $this->characterSetName;
        }

        if (null !== $this->collate) {
            $res['Collate'] = $this->collate;
        }

        if (null !== $this->connLimit) {
            $res['ConnLimit'] = $this->connLimit;
        }

        if (null !== $this->ctype) {
            $res['Ctype'] = $this->ctype;
        }

        if (null !== $this->DBDescription) {
            $res['DBDescription'] = $this->DBDescription;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        if (null !== $this->DBStatus) {
            $res['DBStatus'] = $this->DBStatus;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->runtimeInfo) {
            $res['RuntimeInfo'] = null !== $this->runtimeInfo ? $this->runtimeInfo->toArray($noStream) : $this->runtimeInfo;
        }

        if (null !== $this->tablespace) {
            $res['Tablespace'] = $this->tablespace;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Accounts'])) {
            $model->accounts = accounts::fromMap($map['Accounts']);
        }

        if (isset($map['AdvancedInfo'])) {
            $model->advancedInfo = advancedInfo::fromMap($map['AdvancedInfo']);
        }

        if (isset($map['BasicInfo'])) {
            $model->basicInfo = basicInfo::fromMap($map['BasicInfo']);
        }

        if (isset($map['CharacterSetName'])) {
            $model->characterSetName = $map['CharacterSetName'];
        }

        if (isset($map['Collate'])) {
            $model->collate = $map['Collate'];
        }

        if (isset($map['ConnLimit'])) {
            $model->connLimit = $map['ConnLimit'];
        }

        if (isset($map['Ctype'])) {
            $model->ctype = $map['Ctype'];
        }

        if (isset($map['DBDescription'])) {
            $model->DBDescription = $map['DBDescription'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        if (isset($map['DBStatus'])) {
            $model->DBStatus = $map['DBStatus'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RuntimeInfo'])) {
            $model->runtimeInfo = runtimeInfo::fromMap($map['RuntimeInfo']);
        }

        if (isset($map['Tablespace'])) {
            $model->tablespace = $map['Tablespace'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
