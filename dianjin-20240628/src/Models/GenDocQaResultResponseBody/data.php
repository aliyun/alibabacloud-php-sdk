<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GenDocQaResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GenDocQaResultResponseBody\data\parseQaResults;

class data extends Model
{
    /**
     * @var string
     */
    public $currentStatus;
    /**
     * @var string
     */
    public $docId;
    /**
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
        if (\is_array($this->parseQaResults)) {
            Model::validateArray($this->parseQaResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->parseQaResults)) {
                $res['parseQaResults'] = [];
                $n1                    = 0;
                foreach ($this->parseQaResults as $item1) {
                    $res['parseQaResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1                    = 0;
                foreach ($map['parseQaResults'] as $item1) {
                    $model->parseQaResults[$n1++] = parseQaResults::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
