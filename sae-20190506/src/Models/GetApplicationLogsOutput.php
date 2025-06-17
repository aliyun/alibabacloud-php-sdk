<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class GetApplicationLogsOutput extends Model
{
    /**
     * @var LogEntry[]
     */
    public $logEntrys;

    /**
     * @var int
     */
    public $nextOffset;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logEntrys' => 'logEntrys',
        'nextOffset' => 'nextOffset',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->logEntrys)) {
            Model::validateArray($this->logEntrys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logEntrys) {
            if (\is_array($this->logEntrys)) {
                $res['logEntrys'] = [];
                $n1 = 0;
                foreach ($this->logEntrys as $item1) {
                    $res['logEntrys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextOffset) {
            $res['nextOffset'] = $this->nextOffset;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['logEntrys'])) {
            if (!empty($map['logEntrys'])) {
                $model->logEntrys = [];
                $n1 = 0;
                foreach ($map['logEntrys'] as $item1) {
                    $model->logEntrys[$n1] = LogEntry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nextOffset'])) {
            $model->nextOffset = $map['nextOffset'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
