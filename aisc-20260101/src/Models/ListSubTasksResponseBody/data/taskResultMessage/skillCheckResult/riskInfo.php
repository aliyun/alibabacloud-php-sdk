<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\skillCheckResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\skillCheckResult\riskInfo\ext;

class riskInfo extends Model
{
    /**
     * @var ext
     */
    public $ext;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $resultType;
    protected $_name = [
        'ext' => 'Ext',
        'path' => 'Path',
        'resultType' => 'ResultType',
    ];

    public function validate()
    {
        if (null !== $this->ext) {
            $this->ext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ext) {
            $res['Ext'] = null !== $this->ext ? $this->ext->toArray($noStream) : $this->ext;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
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
        if (isset($map['Ext'])) {
            $model->ext = ext::fromMap($map['Ext']);
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }

        return $model;
    }
}
