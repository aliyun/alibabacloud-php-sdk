<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsQuotaResponseBody;

use AlibabaCloud\Dara\Model;

class policyItems extends Model
{
    /**
     * @var int
     */
    public $accessTTL;

    /**
     * @var int
     */
    public $changeTTL;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $exclude;

    /**
     * @var int
     */
    public $fileCountLimit;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $include;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $sizeLimit;
    protected $_name = [
        'accessTTL' => 'AccessTTL',
        'changeTTL' => 'ChangeTTL',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'exclude' => 'Exclude',
        'fileCountLimit' => 'FileCountLimit',
        'id' => 'Id',
        'include' => 'Include',
        'name' => 'Name',
        'priority' => 'Priority',
        'sizeLimit' => 'SizeLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTTL) {
            $res['AccessTTL'] = $this->accessTTL;
        }

        if (null !== $this->changeTTL) {
            $res['ChangeTTL'] = $this->changeTTL;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }

        if (null !== $this->fileCountLimit) {
            $res['FileCountLimit'] = $this->fileCountLimit;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->sizeLimit) {
            $res['SizeLimit'] = $this->sizeLimit;
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
        if (isset($map['AccessTTL'])) {
            $model->accessTTL = $map['AccessTTL'];
        }

        if (isset($map['ChangeTTL'])) {
            $model->changeTTL = $map['ChangeTTL'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }

        if (isset($map['FileCountLimit'])) {
            $model->fileCountLimit = $map['FileCountLimit'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['SizeLimit'])) {
            $model->sizeLimit = $map['SizeLimit'];
        }

        return $model;
    }
}
