<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class PrivatePoolOptions extends Model
{
    /**
     * @example Open
     *
     * @var string
     */
    public $matchCriteria;

    /**
     * @example eap-bp67acfmxazb4****
     *
     * @var string[]
     */
    public $privatePoolIds;
    protected $_name = [
        'matchCriteria'  => 'MatchCriteria',
        'privatePoolIds' => 'PrivatePoolIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchCriteria) {
            $res['MatchCriteria'] = $this->matchCriteria;
        }
        if (null !== $this->privatePoolIds) {
            $res['PrivatePoolIds'] = $this->privatePoolIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PrivatePoolOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchCriteria'])) {
            $model->matchCriteria = $map['MatchCriteria'];
        }
        if (isset($map['PrivatePoolIds'])) {
            if (!empty($map['PrivatePoolIds'])) {
                $model->privatePoolIds = $map['PrivatePoolIds'];
            }
        }

        return $model;
    }
}
