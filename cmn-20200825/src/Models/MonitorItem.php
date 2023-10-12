<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class MonitorItem extends Model
{
    /**
     * @var string
     */
    public $analysisCode;

    /**
     * @var string
     */
    public $collectionType;

    /**
     * @var string
     */
    public $config;

    /**
     * @var int
     */
    public $enable;

    /**
     * @var string
     */
    public $execInterval;

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
    public $monitorItemDescription;

    /**
     * @var string
     */
    public $monitorItemId;

    /**
     * @var string
     */
    public $monitorItemName;

    /**
     * @var string
     */
    public $securityDomain;
    protected $_name = [
        'analysisCode'           => 'AnalysisCode',
        'collectionType'         => 'CollectionType',
        'config'                 => 'Config',
        'enable'                 => 'Enable',
        'execInterval'           => 'ExecInterval',
        'gmtCreate'              => 'GmtCreate',
        'gmtModified'            => 'GmtModified',
        'monitorItemDescription' => 'MonitorItemDescription',
        'monitorItemId'          => 'MonitorItemId',
        'monitorItemName'        => 'MonitorItemName',
        'securityDomain'         => 'SecurityDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisCode) {
            $res['AnalysisCode'] = $this->analysisCode;
        }
        if (null !== $this->collectionType) {
            $res['CollectionType'] = $this->collectionType;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->execInterval) {
            $res['ExecInterval'] = $this->execInterval;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->monitorItemDescription) {
            $res['MonitorItemDescription'] = $this->monitorItemDescription;
        }
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }
        if (null !== $this->monitorItemName) {
            $res['MonitorItemName'] = $this->monitorItemName;
        }
        if (null !== $this->securityDomain) {
            $res['SecurityDomain'] = $this->securityDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MonitorItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalysisCode'])) {
            $model->analysisCode = $map['AnalysisCode'];
        }
        if (isset($map['CollectionType'])) {
            $model->collectionType = $map['CollectionType'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['ExecInterval'])) {
            $model->execInterval = $map['ExecInterval'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['MonitorItemDescription'])) {
            $model->monitorItemDescription = $map['MonitorItemDescription'];
        }
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }
        if (isset($map['MonitorItemName'])) {
            $model->monitorItemName = $map['MonitorItemName'];
        }
        if (isset($map['SecurityDomain'])) {
            $model->securityDomain = $map['SecurityDomain'];
        }

        return $model;
    }
}
