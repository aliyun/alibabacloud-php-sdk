<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponseBody\suspEvents;

use AlibabaCloud\Tea\Model;

class tacticItems extends Model
{
    /**
     * @description The tactic name of ATT\&CK.
     *
     * @example Malicious scripts-Malicious script code execution
     *
     * @var string
     */
    public $tacticDisplayName;

    /**
     * @description The stage information about ATT\&CK.
     *
     * @example TA0001
     *
     * @var string
     */
    public $tacticId;
    protected $_name = [
        'tacticDisplayName' => 'TacticDisplayName',
        'tacticId'          => 'TacticId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tacticDisplayName) {
            $res['TacticDisplayName'] = $this->tacticDisplayName;
        }
        if (null !== $this->tacticId) {
            $res['TacticId'] = $this->tacticId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tacticItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TacticDisplayName'])) {
            $model->tacticDisplayName = $map['TacticDisplayName'];
        }
        if (isset($map['TacticId'])) {
            $model->tacticId = $map['TacticId'];
        }

        return $model;
    }
}
