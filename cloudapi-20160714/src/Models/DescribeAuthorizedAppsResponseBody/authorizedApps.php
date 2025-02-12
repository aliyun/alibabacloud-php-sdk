<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponseBody\authorizedApps\authorizedApp;

class authorizedApps extends Model
{
    /**
     * @var authorizedApp[]
     */
    public $authorizedApp;
    protected $_name = [
        'authorizedApp' => 'AuthorizedApp',
    ];

    public function validate()
    {
        if (\is_array($this->authorizedApp)) {
            Model::validateArray($this->authorizedApp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedApp) {
            if (\is_array($this->authorizedApp)) {
                $res['AuthorizedApp'] = [];
                $n1                   = 0;
                foreach ($this->authorizedApp as $item1) {
                    $res['AuthorizedApp'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AuthorizedApp'])) {
            if (!empty($map['AuthorizedApp'])) {
                $model->authorizedApp = [];
                $n1                   = 0;
                foreach ($map['AuthorizedApp'] as $item1) {
                    $model->authorizedApp[$n1++] = authorizedApp::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
