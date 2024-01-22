<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
        'logEntrys'  => 'logEntrys',
        'nextOffset' => 'nextOffset',
        'requestId'  => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logEntrys) {
            $res['logEntrys'] = [];
            if (null !== $this->logEntrys && \is_array($this->logEntrys)) {
                $n = 0;
                foreach ($this->logEntrys as $item) {
                    $res['logEntrys'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return GetApplicationLogsOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logEntrys'])) {
            if (!empty($map['logEntrys'])) {
                $model->logEntrys = [];
                $n                = 0;
                foreach ($map['logEntrys'] as $item) {
                    $model->logEntrys[$n++] = null !== $item ? LogEntry::fromMap($item) : $item;
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
