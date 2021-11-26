<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\QueryResourceStaticsResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\QueryResourceStaticsResponseBody\data\realTimeRes;
use AlibabaCloud\SDK\Sae\V20190506\Models\QueryResourceStaticsResponseBody\data\summary;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var realTimeRes
     */
    public $realTimeRes;

    /**
     * @var summary
     */
    public $summary;
    protected $_name = [
        'realTimeRes' => 'RealTimeRes',
        'summary'     => 'Summary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->realTimeRes) {
            $res['RealTimeRes'] = null !== $this->realTimeRes ? $this->realTimeRes->toMap() : null;
        }
        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toMap() : null;
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
        if (isset($map['RealTimeRes'])) {
            $model->realTimeRes = realTimeRes::fromMap($map['RealTimeRes']);
        }
        if (isset($map['Summary'])) {
            $model->summary = summary::fromMap($map['Summary']);
        }

        return $model;
    }
}
