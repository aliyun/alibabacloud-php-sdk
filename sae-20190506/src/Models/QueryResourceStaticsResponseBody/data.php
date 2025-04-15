<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\QueryResourceStaticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\QueryResourceStaticsResponseBody\data\realTimeRes;
use AlibabaCloud\SDK\Sae\V20190506\Models\QueryResourceStaticsResponseBody\data\summary;

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
        'summary' => 'Summary',
    ];

    public function validate()
    {
        if (null !== $this->realTimeRes) {
            $this->realTimeRes->validate();
        }
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->realTimeRes) {
            $res['RealTimeRes'] = null !== $this->realTimeRes ? $this->realTimeRes->toArray($noStream) : $this->realTimeRes;
        }

        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
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
        if (isset($map['RealTimeRes'])) {
            $model->realTimeRes = realTimeRes::fromMap($map['RealTimeRes']);
        }

        if (isset($map['Summary'])) {
            $model->summary = summary::fromMap($map['Summary']);
        }

        return $model;
    }
}
