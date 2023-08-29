<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value;

use AlibabaCloud\Tea\Model;

class limitRule extends Model
{
    /**
     * @var string
     */
    public $defaultResponse;

    /**
     * @var string
     */
    public $i18nResponse;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'defaultResponse' => 'DefaultResponse',
        'i18nResponse'    => 'I18nResponse',
        'interval'        => 'Interval',
        'limit'           => 'Limit',
        'mode'            => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultResponse) {
            $res['DefaultResponse'] = $this->defaultResponse;
        }
        if (null !== $this->i18nResponse) {
            $res['I18nResponse'] = $this->i18nResponse;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return limitRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultResponse'])) {
            $model->defaultResponse = $map['DefaultResponse'];
        }
        if (isset($map['I18nResponse'])) {
            $model->i18nResponse = $map['I18nResponse'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
