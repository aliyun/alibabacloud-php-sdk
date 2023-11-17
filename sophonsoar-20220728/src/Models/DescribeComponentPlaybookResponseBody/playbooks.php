<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentPlaybookResponseBody;

use AlibabaCloud\Tea\Model;

class playbooks extends Model
{
    /**
     * @example aegis_kill_process
     *
     * @var string
     */
    public $description;

    /**
     * @example AegisKillQuara
     *
     * @var string
     */
    public $displayName;

    /**
     * @example [
     * ]
     * @var string
     */
    public $inputParams;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'inputParams' => 'InputParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->inputParams) {
            $res['InputParams'] = $this->inputParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playbooks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['InputParams'])) {
            $model->inputParams = $map['InputParams'];
        }

        return $model;
    }
}
