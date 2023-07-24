<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sasti\V20200512\Models\GetGraphQueryTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
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
    public $gremlinTemplate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lastModifier;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $scenarioDesc;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'gremlinTemplate' => 'GremlinTemplate',
        'id'              => 'Id',
        'lastModifier'    => 'LastModifier',
        'scenario'        => 'Scenario',
        'scenarioDesc'    => 'ScenarioDesc',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gremlinTemplate) {
            $res['GremlinTemplate'] = $this->gremlinTemplate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifier) {
            $res['LastModifier'] = $this->lastModifier;
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }
        if (null !== $this->scenarioDesc) {
            $res['ScenarioDesc'] = $this->scenarioDesc;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GremlinTemplate'])) {
            $model->gremlinTemplate = $map['GremlinTemplate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifier'])) {
            $model->lastModifier = $map['LastModifier'];
        }
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }
        if (isset($map['ScenarioDesc'])) {
            $model->scenarioDesc = $map['ScenarioDesc'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
