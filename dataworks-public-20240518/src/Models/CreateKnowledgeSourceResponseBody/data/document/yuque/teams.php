<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeSourceResponseBody\data\document\yuque;

use AlibabaCloud\Dara\Model;

class teams extends Model
{
    /**
     * @var string
     */
    public $host;

    /**
     * @var string[]
     */
    public $sourceUrls;

    /**
     * @var string
     */
    public $teamId;

    /**
     * @var string
     */
    public $teamLogin;

    /**
     * @var string
     */
    public $teamName;
    protected $_name = [
        'host' => 'Host',
        'sourceUrls' => 'SourceUrls',
        'teamId' => 'TeamId',
        'teamLogin' => 'TeamLogin',
        'teamName' => 'TeamName',
    ];

    public function validate()
    {
        if (\is_array($this->sourceUrls)) {
            Model::validateArray($this->sourceUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->sourceUrls) {
            if (\is_array($this->sourceUrls)) {
                $res['SourceUrls'] = [];
                $n1 = 0;
                foreach ($this->sourceUrls as $item1) {
                    $res['SourceUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->teamId) {
            $res['TeamId'] = $this->teamId;
        }

        if (null !== $this->teamLogin) {
            $res['TeamLogin'] = $this->teamLogin;
        }

        if (null !== $this->teamName) {
            $res['TeamName'] = $this->teamName;
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
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['SourceUrls'])) {
            if (!empty($map['SourceUrls'])) {
                $model->sourceUrls = [];
                $n1 = 0;
                foreach ($map['SourceUrls'] as $item1) {
                    $model->sourceUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TeamId'])) {
            $model->teamId = $map['TeamId'];
        }

        if (isset($map['TeamLogin'])) {
            $model->teamLogin = $map['TeamLogin'];
        }

        if (isset($map['TeamName'])) {
            $model->teamName = $map['TeamName'];
        }

        return $model;
    }
}
