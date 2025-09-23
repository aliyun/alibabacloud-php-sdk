<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ConfigureResultExportRequest;

use AlibabaCloud\Dara\Model;

class slsInfo extends Model
{
    /**
     * @var int
     */
    public $logstoreTtl;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $slsProject;
    protected $_name = [
        'logstoreTtl' => 'LogstoreTtl',
        'resourceGroup' => 'ResourceGroup',
        'slsProject' => 'SlsProject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logstoreTtl) {
            $res['LogstoreTtl'] = $this->logstoreTtl;
        }

        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }

        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
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
        if (isset($map['LogstoreTtl'])) {
            $model->logstoreTtl = $map['LogstoreTtl'];
        }

        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }

        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }

        return $model;
    }
}
