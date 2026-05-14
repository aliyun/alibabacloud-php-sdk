<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListIvrNodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListIvrNodesResponseBody\data\ivrNodes;

class data extends Model
{
    /**
     * @var string
     */
    public $clinkRequestId;

    /**
     * @var ivrNodes[]
     */
    public $ivrNodes;
    protected $_name = [
        'clinkRequestId' => 'ClinkRequestId',
        'ivrNodes' => 'IvrNodes',
    ];

    public function validate()
    {
        if (\is_array($this->ivrNodes)) {
            Model::validateArray($this->ivrNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
        }

        if (null !== $this->ivrNodes) {
            if (\is_array($this->ivrNodes)) {
                $res['IvrNodes'] = [];
                $n1 = 0;
                foreach ($this->ivrNodes as $item1) {
                    $res['IvrNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        if (isset($map['IvrNodes'])) {
            if (!empty($map['IvrNodes'])) {
                $model->ivrNodes = [];
                $n1 = 0;
                foreach ($map['IvrNodes'] as $item1) {
                    $model->ivrNodes[$n1] = ivrNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
