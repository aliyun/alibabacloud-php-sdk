<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig\idp;

use AlibabaCloud\Tea\Model;

class dingtalk extends Model
{
    /**
     * @var string
     */
    public $eventCallbackBase;

    /**
     * @var string
     */
    public $eventLabel;

    /**
     * @var string
     */
    public $homePage;

    /**
     * @var string
     */
    public $loginRedirect;
    protected $_name = [
        'eventCallbackBase' => 'EventCallbackBase',
        'eventLabel' => 'EventLabel',
        'homePage' => 'HomePage',
        'loginRedirect' => 'LoginRedirect',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCallbackBase) {
            $res['EventCallbackBase'] = $this->eventCallbackBase;
        }
        if (null !== $this->eventLabel) {
            $res['EventLabel'] = $this->eventLabel;
        }
        if (null !== $this->homePage) {
            $res['HomePage'] = $this->homePage;
        }
        if (null !== $this->loginRedirect) {
            $res['LoginRedirect'] = $this->loginRedirect;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dingtalk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventCallbackBase'])) {
            $model->eventCallbackBase = $map['EventCallbackBase'];
        }
        if (isset($map['EventLabel'])) {
            $model->eventLabel = $map['EventLabel'];
        }
        if (isset($map['HomePage'])) {
            $model->homePage = $map['HomePage'];
        }
        if (isset($map['LoginRedirect'])) {
            $model->loginRedirect = $map['LoginRedirect'];
        }

        return $model;
    }
}
