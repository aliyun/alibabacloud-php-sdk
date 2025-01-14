<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class DisposalContent extends Model
{
    /**
     * @var string
     */
    public $alertContent;

    /**
     * @var string
     */
    public $alertTitle;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $notifyActions;

    /**
     * @var string[]
     */
    public $prohibitActions;
    protected $_name = [
        'alertContent'    => 'AlertContent',
        'alertTitle'      => 'AlertTitle',
        'notifyActions'   => 'NotifyActions',
        'prohibitActions' => 'ProhibitActions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertContent) {
            $res['AlertContent'] = $this->alertContent;
        }
        if (null !== $this->alertTitle) {
            $res['AlertTitle'] = $this->alertTitle;
        }
        if (null !== $this->notifyActions) {
            $res['NotifyActions'] = $this->notifyActions;
        }
        if (null !== $this->prohibitActions) {
            $res['ProhibitActions'] = $this->prohibitActions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisposalContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertContent'])) {
            $model->alertContent = $map['AlertContent'];
        }
        if (isset($map['AlertTitle'])) {
            $model->alertTitle = $map['AlertTitle'];
        }
        if (isset($map['NotifyActions'])) {
            if (!empty($map['NotifyActions'])) {
                $model->notifyActions = $map['NotifyActions'];
            }
        }
        if (isset($map['ProhibitActions'])) {
            if (!empty($map['ProhibitActions'])) {
                $model->prohibitActions = $map['ProhibitActions'];
            }
        }

        return $model;
    }
}
