<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogSourceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $logSource;

    /**
     * @var string
     */
    public $logSourceName;
    protected $_name = [
        'logSource' => 'LogSource',
        'logSourceName' => 'LogSourceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logSource) {
            $res['LogSource'] = $this->logSource;
        }

        if (null !== $this->logSourceName) {
            $res['LogSourceName'] = $this->logSourceName;
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
        if (isset($map['LogSource'])) {
            $model->logSource = $map['LogSource'];
        }

        if (isset($map['LogSourceName'])) {
            $model->logSourceName = $map['LogSourceName'];
        }

        return $model;
    }
}
