<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineStepLogResponseBody;

use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var int
     */
    public $last;

    /**
     * @var bool
     */
    public $more;

    /**
     * @var string
     */
    public $logs;
    protected $_name = [
        'last' => 'Last',
        'more' => 'More',
        'logs' => 'Logs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->last) {
            $res['Last'] = $this->last;
        }
        if (null !== $this->more) {
            $res['More'] = $this->more;
        }
        if (null !== $this->logs) {
            $res['Logs'] = $this->logs;
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
        if (isset($map['Last'])) {
            $model->last = $map['Last'];
        }
        if (isset($map['More'])) {
            $model->more = $map['More'];
        }
        if (isset($map['Logs'])) {
            $model->logs = $map['Logs'];
        }

        return $model;
    }
}
