<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditNotifyConfigResponseBody\liveAudioAuditNotifyConfigList;

use AlibabaCloud\Tea\Model;

class liveAudioAuditNotifyConfig extends Model
{
    /**
     * @var string
     */
    public $callbackTemplate;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $callback;
    protected $_name = [
        'callbackTemplate' => 'CallbackTemplate',
        'domainName'       => 'DomainName',
        'callback'         => 'Callback',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackTemplate) {
            $res['CallbackTemplate'] = $this->callbackTemplate;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveAudioAuditNotifyConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackTemplate'])) {
            $model->callbackTemplate = $map['CallbackTemplate'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }

        return $model;
    }
}
