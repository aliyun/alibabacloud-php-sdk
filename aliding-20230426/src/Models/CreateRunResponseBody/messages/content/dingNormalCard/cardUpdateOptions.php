<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\content\dingNormalCard;

use AlibabaCloud\Tea\Model;

class cardUpdateOptions extends Model
{
    /**
     * @example {}
     *
     * @var bool
     */
    public $updateCardDataByKey;

    /**
     * @example {}
     *
     * @var bool
     */
    public $updatePrivateDataByKey;
    protected $_name = [
        'updateCardDataByKey' => 'updateCardDataByKey',
        'updatePrivateDataByKey' => 'updatePrivateDataByKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateCardDataByKey) {
            $res['updateCardDataByKey'] = $this->updateCardDataByKey;
        }
        if (null !== $this->updatePrivateDataByKey) {
            $res['updatePrivateDataByKey'] = $this->updatePrivateDataByKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cardUpdateOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['updateCardDataByKey'])) {
            $model->updateCardDataByKey = $map['updateCardDataByKey'];
        }
        if (isset($map['updatePrivateDataByKey'])) {
            $model->updatePrivateDataByKey = $map['updatePrivateDataByKey'];
        }

        return $model;
    }
}
