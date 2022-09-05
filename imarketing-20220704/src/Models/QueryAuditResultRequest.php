<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class QueryAuditResultRequest extends Model
{
    /**
     * @var string
     */
    public $dspId;

    /**
     * @var string[]
     */
    public $ids;
    protected $_name = [
        'dspId' => 'DspId',
        'ids'   => 'Ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dspId) {
            $res['DspId'] = $this->dspId;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAuditResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DspId'])) {
            $model->dspId = $map['DspId'];
        }
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }

        return $model;
    }
}
