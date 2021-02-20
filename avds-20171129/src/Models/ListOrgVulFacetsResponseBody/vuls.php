<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgVulFacetsResponseBody;

use AlibabaCloud\Tea\Model;

class vuls extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var int
     */
    public $moduleID;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'index'          => 'Index',
        'severity'       => 'Severity',
        'moduleID'       => 'ModuleID',
        'classification' => 'Classification',
        'name'           => 'Name',
        'count'          => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->moduleID) {
            $res['ModuleID'] = $this->moduleID;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vuls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['ModuleID'])) {
            $model->moduleID = $map['ModuleID'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
