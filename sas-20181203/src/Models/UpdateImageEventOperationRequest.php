<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageEventOperationRequest extends Model
{
    /**
     * @description The ID of the alert handling rule.
     *
     * @example 814163
     *
     * @var int
     */
    public $id;

    /**
     * @description The application scope of the rule. The value is in the JSON format. Valid values:
     *
     *   **type**
     *   **value**
     *
     * @example {\\"type\\": \\"repo\\", \\"value\\": \\"test-aaa/shenzhen-repo-01\\"}
     *
     * @var string
     */
    public $scenarios;
    protected $_name = [
        'id'        => 'Id',
        'scenarios' => 'Scenarios',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->scenarios) {
            $res['Scenarios'] = $this->scenarios;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateImageEventOperationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Scenarios'])) {
            $model->scenarios = $map['Scenarios'];
        }

        return $model;
    }
}
