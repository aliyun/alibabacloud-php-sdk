<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateHoneypotRequest extends Model
{
    /**
     * @description The ID of the image that is used for the honeypot.
     *
     * >  You can call the [ListAvailableHoneypot](~~ListAvailableHoneypot~~) operation to obtain the IDs of images from the **HoneypotImageId** response parameter.
     * @example sha256:ebc4c102ac407d53733c2373e8888a733ddce86f163ccbe7492ae1cbf26****
     *
     * @var string
     */
    public $honeypotImageId;

    /**
     * @description The name of the image that is used for the honeypot.
     *
     * >  You can call the [ListAvailableHoneypot](~~ListAvailableHoneypot~~) operation to obtain the names of images from the **HoneypotImageName** response parameter.
     * @example HoneyPotImageName
     *
     * @var string
     */
    public $honeypotImageName;

    /**
     * @description The custom name of the honeypot.
     *
     * @example ruoyi
     *
     * @var string
     */
    public $honeypotName;

    /**
     * @description The custom configuration of the honeypot in the JSON format. The value contains the following fields:
     *
     *   **trojan_git**: Git-specific Defense. Valid values:
     *
     *   **zip**: Git Source Code Package
     *   **web**: Git Directory Leak
     *   **close**: Disabled
     *
     *   **trojan\_git_addr**: Git Trojan Address.
     *
     *   **trojan_git.zip**: Git Trojan.
     *
     *   **burp**: Burp-specific Defense. Valid values:
     *
     *   **open**: Enabled
     *   **close**: Disabled
     *
     *   **portrait_option**: Source Tracing Configuration. Valid values:
     *
     *   **false**: Disable
     *   **true**: Enable
     *
     * @example {\"trojan_git\":\"close\",\"burp\":\"close\",\"portrait_option\":\"false\"}
     *
     * @var string
     */
    public $meta;

    /**
     * @description The ID of the management node to which you want to deploy the honeypot.
     *
     * >  You can call the [ListHoneypotNode](~~ListHoneypotNode~~) operation to obtain the IDs of management nodes.
     * @example a882e590-b87b-45a6-87b9-d0a3e5a0****
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'honeypotImageId'   => 'HoneypotImageId',
        'honeypotImageName' => 'HoneypotImageName',
        'honeypotName'      => 'HoneypotName',
        'meta'              => 'Meta',
        'nodeId'            => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honeypotImageId) {
            $res['HoneypotImageId'] = $this->honeypotImageId;
        }
        if (null !== $this->honeypotImageName) {
            $res['HoneypotImageName'] = $this->honeypotImageName;
        }
        if (null !== $this->honeypotName) {
            $res['HoneypotName'] = $this->honeypotName;
        }
        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHoneypotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoneypotImageId'])) {
            $model->honeypotImageId = $map['HoneypotImageId'];
        }
        if (isset($map['HoneypotImageName'])) {
            $model->honeypotImageName = $map['HoneypotImageName'];
        }
        if (isset($map['HoneypotName'])) {
            $model->honeypotName = $map['HoneypotName'];
        }
        if (isset($map['Meta'])) {
            $model->meta = $map['Meta'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
