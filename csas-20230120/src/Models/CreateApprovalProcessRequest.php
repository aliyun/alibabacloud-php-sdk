<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\CreateApprovalProcessRequest\matchSchemas;
use AlibabaCloud\Tea\Model;

class CreateApprovalProcessRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var matchSchemas
     */
    public $matchSchemas;

    /**
     * @description This parameter is required.
     *
     * @example test_process
     *
     * @var string
     */
    public $processName;

    /**
     * @description This parameter is required.
     *
     * @var string[][]
     */
    public $processNodes;
    protected $_name = [
        'description'  => 'Description',
        'matchSchemas' => 'MatchSchemas',
        'processName'  => 'ProcessName',
        'processNodes' => 'ProcessNodes',
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
        if (null !== $this->matchSchemas) {
            $res['MatchSchemas'] = null !== $this->matchSchemas ? $this->matchSchemas->toMap() : null;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->processNodes) {
            $res['ProcessNodes'] = $this->processNodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApprovalProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MatchSchemas'])) {
            $model->matchSchemas = matchSchemas::fromMap($map['MatchSchemas']);
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['ProcessNodes'])) {
            if (!empty($map['ProcessNodes'])) {
                $model->processNodes = $map['ProcessNodes'];
            }
        }

        return $model;
    }
}
