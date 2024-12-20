<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GenDocQaResultResponseBody;

use AlibabaCloud\SDK\DianJin\V20240628\Models\GenDocQaResultResponseBody\data\parseQaResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example PROCESSING
     *
     * @var string
     */
    public $currentStatus;

    /**
     * @example 873648346573245
     *
     * @var string
     */
    public $docId;

    /**
     * @example 7wxwrjpabj
     *
     * @var string
     */
    public $libraryId;

    /**
     * @var parseQaResults[]
     */
    public $parseQaResults;
    protected $_name = [
        'currentStatus'  => 'currentStatus',
        'docId'          => 'docId',
        'libraryId'      => 'libraryId',
        'parseQaResults' => 'parseQaResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentStatus) {
            $res['currentStatus'] = $this->currentStatus;
        }
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }
        if (null !== $this->parseQaResults) {
            $res['parseQaResults'] = [];
            if (null !== $this->parseQaResults && \is_array($this->parseQaResults)) {
                $n = 0;
                foreach ($this->parseQaResults as $item) {
                    $res['parseQaResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currentStatus'])) {
            $model->currentStatus = $map['currentStatus'];
        }
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }
        if (isset($map['parseQaResults'])) {
            if (!empty($map['parseQaResults'])) {
                $model->parseQaResults = [];
                $n                     = 0;
                foreach ($map['parseQaResults'] as $item) {
                    $model->parseQaResults[$n++] = null !== $item ? parseQaResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
