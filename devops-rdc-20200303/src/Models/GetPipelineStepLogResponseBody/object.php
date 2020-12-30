<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineStepLogResponseBody;

use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var string
     */
    public $logs;

    /**
     * @var int
     */
    public $last;

    /**
     * @var bool
     */
    public $more;
    protected $_name = [
        'logs' => 'Logs',
        'last' => 'Last',
        'more' => 'More',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logs) {
            $res['Logs'] = $this->logs;
        }
        if (null !== $this->last) {
            $res['Last'] = $this->last;
        }
        if (null !== $this->more) {
            $res['More'] = $this->more;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return object
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Logs'])) {
            $model->logs = $map['Logs'];
        }
        if (isset($map['Last'])) {
            $model->last = $map['Last'];
        }
        if (isset($map['More'])) {
            $model->more = $map['More'];
        }

        return $model;
    }
}
