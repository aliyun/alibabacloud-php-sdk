<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class IgnoreIdcProbeScanResultRequest extends Model
{
    /**
     * @var int
     */
    public $ignoreAction;

    /**
     * @var string
     */
    public $scanResultIds;
    protected $_name = [
        'ignoreAction' => 'IgnoreAction',
        'scanResultIds' => 'ScanResultIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ignoreAction) {
            $res['IgnoreAction'] = $this->ignoreAction;
        }

        if (null !== $this->scanResultIds) {
            $res['ScanResultIds'] = $this->scanResultIds;
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
        if (isset($map['IgnoreAction'])) {
            $model->ignoreAction = $map['IgnoreAction'];
        }

        if (isset($map['ScanResultIds'])) {
            $model->scanResultIds = $map['ScanResultIds'];
        }

        return $model;
    }
}
