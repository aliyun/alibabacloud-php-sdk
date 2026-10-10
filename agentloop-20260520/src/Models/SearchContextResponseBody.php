<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class SearchContextResponseBody extends Model
{
    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $recallEventId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[][]
     */
    public $results;
    protected $_name = [
        'auditStatus' => 'auditStatus',
        'recallEventId' => 'recallEventId',
        'requestId' => 'requestId',
        'results' => 'results',
    ];

    public function validate()
    {
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['auditStatus'] = $this->auditStatus;
        }

        if (null !== $this->recallEventId) {
            $res['recallEventId'] = $this->recallEventId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    if (\is_array($item1)) {
                        $res['results'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['results'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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
        if (isset($map['auditStatus'])) {
            $model->auditStatus = $map['auditStatus'];
        }

        if (isset($map['recallEventId'])) {
            $model->recallEventId = $map['recallEventId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['results'] as $item1) {
                    if (!empty($item1)) {
                        $model->results[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->results[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
