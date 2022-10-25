<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models;

use AlibabaCloud\Tea\Model;

class GetFileLastCommitRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $sha;
    protected $_name = [
        'accessToken'    => 'AccessToken',
        'filePath'       => 'FilePath',
        'organizationId' => 'OrganizationId',
        'sha'            => 'Sha',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->sha) {
            $res['Sha'] = $this->sha;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFileLastCommitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['Sha'])) {
            $model->sha = $map['Sha'];
        }

        return $model;
    }
}
