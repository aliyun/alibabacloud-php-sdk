<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->notifyActions)) {
            Model::validateArray($this->notifyActions);
        }
        if (\is_array($this->prohibitActions)) {
            Model::validateArray($this->prohibitActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertContent) {
            $res['AlertContent'] = $this->alertContent;
        }

        if (null !== $this->alertTitle) {
            $res['AlertTitle'] = $this->alertTitle;
        }

        if (null !== $this->notifyActions) {
            if (\is_array($this->notifyActions)) {
                $res['NotifyActions'] = [];
                $n1                   = 0;
                foreach ($this->notifyActions as $item1) {
                    $res['NotifyActions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->prohibitActions) {
            if (\is_array($this->prohibitActions)) {
                $res['ProhibitActions'] = [];
                $n1                     = 0;
                foreach ($this->prohibitActions as $item1) {
                    $res['ProhibitActions'][$n1++] = $item1;
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
        if (isset($map['AlertContent'])) {
            $model->alertContent = $map['AlertContent'];
        }

        if (isset($map['AlertTitle'])) {
            $model->alertTitle = $map['AlertTitle'];
        }

        if (isset($map['NotifyActions'])) {
            if (!empty($map['NotifyActions'])) {
                $model->notifyActions = [];
                $n1                   = 0;
                foreach ($map['NotifyActions'] as $item1) {
                    $model->notifyActions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProhibitActions'])) {
            if (!empty($map['ProhibitActions'])) {
                $model->prohibitActions = [];
                $n1                     = 0;
                foreach ($map['ProhibitActions'] as $item1) {
                    $model->prohibitActions[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
