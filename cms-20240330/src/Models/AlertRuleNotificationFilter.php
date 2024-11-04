<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class AlertRuleNotificationFilter extends Model
{
    /**
     * @var string[]
     */
    public $contacts;

    /**
     * @var string[]
     */
    public $customWebhooks;

    /**
     * @var string[]
     */
    public $dingWebhooks;

    /**
     * @var string[]
     */
    public $fsWebhooks;

    /**
     * @var string[]
     */
    public $groups;

    /**
     * @var string[]
     */
    public $slackWebhooks;

    /**
     * @var string[]
     */
    public $wxWebhooks;
    protected $_name = [
        'contacts'       => 'contacts',
        'customWebhooks' => 'customWebhooks',
        'dingWebhooks'   => 'dingWebhooks',
        'fsWebhooks'     => 'fsWebhooks',
        'groups'         => 'groups',
        'slackWebhooks'  => 'slackWebhooks',
        'wxWebhooks'     => 'wxWebhooks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contacts) {
            $res['contacts'] = $this->contacts;
        }
        if (null !== $this->customWebhooks) {
            $res['customWebhooks'] = $this->customWebhooks;
        }
        if (null !== $this->dingWebhooks) {
            $res['dingWebhooks'] = $this->dingWebhooks;
        }
        if (null !== $this->fsWebhooks) {
            $res['fsWebhooks'] = $this->fsWebhooks;
        }
        if (null !== $this->groups) {
            $res['groups'] = $this->groups;
        }
        if (null !== $this->slackWebhooks) {
            $res['slackWebhooks'] = $this->slackWebhooks;
        }
        if (null !== $this->wxWebhooks) {
            $res['wxWebhooks'] = $this->wxWebhooks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertRuleNotificationFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contacts'])) {
            if (!empty($map['contacts'])) {
                $model->contacts = $map['contacts'];
            }
        }
        if (isset($map['customWebhooks'])) {
            if (!empty($map['customWebhooks'])) {
                $model->customWebhooks = $map['customWebhooks'];
            }
        }
        if (isset($map['dingWebhooks'])) {
            if (!empty($map['dingWebhooks'])) {
                $model->dingWebhooks = $map['dingWebhooks'];
            }
        }
        if (isset($map['fsWebhooks'])) {
            if (!empty($map['fsWebhooks'])) {
                $model->fsWebhooks = $map['fsWebhooks'];
            }
        }
        if (isset($map['groups'])) {
            if (!empty($map['groups'])) {
                $model->groups = $map['groups'];
            }
        }
        if (isset($map['slackWebhooks'])) {
            if (!empty($map['slackWebhooks'])) {
                $model->slackWebhooks = $map['slackWebhooks'];
            }
        }
        if (isset($map['wxWebhooks'])) {
            if (!empty($map['wxWebhooks'])) {
                $model->wxWebhooks = $map['wxWebhooks'];
            }
        }

        return $model;
    }
}
