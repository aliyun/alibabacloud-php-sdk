<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class NotificationChannelsFilter extends Model
{
    /**
     * @var string[]
     */
    public $containsContacts;

    /**
     * @var string[]
     */
    public $containsCustomWebhooks;

    /**
     * @var string[]
     */
    public $containsDingWebhooks;

    /**
     * @var string[]
     */
    public $containsFsWebhooks;

    /**
     * @var string[]
     */
    public $containsGroups;

    /**
     * @var string[]
     */
    public $containsSlackWebhooks;

    /**
     * @var string[]
     */
    public $containsWxWebhooks;
    protected $_name = [
        'containsContacts' => 'containsContacts',
        'containsCustomWebhooks' => 'containsCustomWebhooks',
        'containsDingWebhooks' => 'containsDingWebhooks',
        'containsFsWebhooks' => 'containsFsWebhooks',
        'containsGroups' => 'containsGroups',
        'containsSlackWebhooks' => 'containsSlackWebhooks',
        'containsWxWebhooks' => 'containsWxWebhooks',
    ];

    public function validate()
    {
        if (\is_array($this->containsContacts)) {
            Model::validateArray($this->containsContacts);
        }
        if (\is_array($this->containsCustomWebhooks)) {
            Model::validateArray($this->containsCustomWebhooks);
        }
        if (\is_array($this->containsDingWebhooks)) {
            Model::validateArray($this->containsDingWebhooks);
        }
        if (\is_array($this->containsFsWebhooks)) {
            Model::validateArray($this->containsFsWebhooks);
        }
        if (\is_array($this->containsGroups)) {
            Model::validateArray($this->containsGroups);
        }
        if (\is_array($this->containsSlackWebhooks)) {
            Model::validateArray($this->containsSlackWebhooks);
        }
        if (\is_array($this->containsWxWebhooks)) {
            Model::validateArray($this->containsWxWebhooks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containsContacts) {
            if (\is_array($this->containsContacts)) {
                $res['containsContacts'] = [];
                $n1 = 0;
                foreach ($this->containsContacts as $item1) {
                    $res['containsContacts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->containsCustomWebhooks) {
            if (\is_array($this->containsCustomWebhooks)) {
                $res['containsCustomWebhooks'] = [];
                $n1 = 0;
                foreach ($this->containsCustomWebhooks as $item1) {
                    $res['containsCustomWebhooks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->containsDingWebhooks) {
            if (\is_array($this->containsDingWebhooks)) {
                $res['containsDingWebhooks'] = [];
                $n1 = 0;
                foreach ($this->containsDingWebhooks as $item1) {
                    $res['containsDingWebhooks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->containsFsWebhooks) {
            if (\is_array($this->containsFsWebhooks)) {
                $res['containsFsWebhooks'] = [];
                $n1 = 0;
                foreach ($this->containsFsWebhooks as $item1) {
                    $res['containsFsWebhooks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->containsGroups) {
            if (\is_array($this->containsGroups)) {
                $res['containsGroups'] = [];
                $n1 = 0;
                foreach ($this->containsGroups as $item1) {
                    $res['containsGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->containsSlackWebhooks) {
            if (\is_array($this->containsSlackWebhooks)) {
                $res['containsSlackWebhooks'] = [];
                $n1 = 0;
                foreach ($this->containsSlackWebhooks as $item1) {
                    $res['containsSlackWebhooks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->containsWxWebhooks) {
            if (\is_array($this->containsWxWebhooks)) {
                $res['containsWxWebhooks'] = [];
                $n1 = 0;
                foreach ($this->containsWxWebhooks as $item1) {
                    $res['containsWxWebhooks'][$n1] = $item1;
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
        if (isset($map['containsContacts'])) {
            if (!empty($map['containsContacts'])) {
                $model->containsContacts = [];
                $n1 = 0;
                foreach ($map['containsContacts'] as $item1) {
                    $model->containsContacts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['containsCustomWebhooks'])) {
            if (!empty($map['containsCustomWebhooks'])) {
                $model->containsCustomWebhooks = [];
                $n1 = 0;
                foreach ($map['containsCustomWebhooks'] as $item1) {
                    $model->containsCustomWebhooks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['containsDingWebhooks'])) {
            if (!empty($map['containsDingWebhooks'])) {
                $model->containsDingWebhooks = [];
                $n1 = 0;
                foreach ($map['containsDingWebhooks'] as $item1) {
                    $model->containsDingWebhooks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['containsFsWebhooks'])) {
            if (!empty($map['containsFsWebhooks'])) {
                $model->containsFsWebhooks = [];
                $n1 = 0;
                foreach ($map['containsFsWebhooks'] as $item1) {
                    $model->containsFsWebhooks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['containsGroups'])) {
            if (!empty($map['containsGroups'])) {
                $model->containsGroups = [];
                $n1 = 0;
                foreach ($map['containsGroups'] as $item1) {
                    $model->containsGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['containsSlackWebhooks'])) {
            if (!empty($map['containsSlackWebhooks'])) {
                $model->containsSlackWebhooks = [];
                $n1 = 0;
                foreach ($map['containsSlackWebhooks'] as $item1) {
                    $model->containsSlackWebhooks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['containsWxWebhooks'])) {
            if (!empty($map['containsWxWebhooks'])) {
                $model->containsWxWebhooks = [];
                $n1 = 0;
                foreach ($map['containsWxWebhooks'] as $item1) {
                    $model->containsWxWebhooks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
